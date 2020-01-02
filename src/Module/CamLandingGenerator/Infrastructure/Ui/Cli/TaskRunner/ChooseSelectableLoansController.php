<?php
declare(strict_types=1);

namespace AuditorFramework\Module\CamLandingGenerator\Infrastructure\Ui\Cli\TaskRunner;

use Exception;
use TheCodeFighters\Bundle\AuditorFramework\Common\Types\Application\CommandBus;
use AuditorFramework\Module\Financial\Application\Loan\Command\ChooseLenderForLoanAmongTheirLoanApplications\ChooseLenderForLoanAmongTheirLoanApplicationsCommand;
use AuditorFramework\Module\Financial\Domain\Loan\LoanReadModelRepository;
use AuditorFramework\Module\Financial\Domain\Loan\LoanStatus;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ChooseSelectableLoansController extends Command
{
    /**
     * @var CommandBus
     */
    private $commandBus;

    /**
     * @var LoanReadModelRepository
     */
    private $loanReadModelRepository;


    public function __construct(
        CommandBus $commandBus,
        LoanReadModelRepository $loanReadModelRepository
    ) {
        parent::__construct();
        $this->commandBus = $commandBus;
        $this->loanReadModelRepository = $loanReadModelRepository;
    }


    protected function configure()
    {
        $this
            ->setName('auditor_framework:task_runner:choose_selectable_loans')
            ->setDescription('Run choose_selectable_loans task runner ');
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int|void|null
     * @throws Exception
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        try {
            $loans = $this->loanReadModelRepository->findOrFailLoansByStatus(new LoanStatus(LoanStatus::STATUS_INITIAL));
            foreach ($loans as $loan) {
                if (
                    !is_null($loan->loanApplicationIds())
                    && !empty($loan->loanApplicationIds())
                ) {
                    try {
                        $this->commandBus->dispatch(
                            new ChooseLenderForLoanAmongTheirLoanApplicationsCommand($loan->id()->value())
                        );
                    } catch (Exception $e) {}
                }
            }
        } catch (Exception $e) {
        }

        $output->writeln('<action>Task Runner: choose_selectable_loans <highlight>%s</highlight> executed</action>');
    }
}
