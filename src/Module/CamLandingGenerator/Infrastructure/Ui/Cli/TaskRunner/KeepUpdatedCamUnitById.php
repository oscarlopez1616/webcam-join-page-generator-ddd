<?php
declare(strict_types=1);

namespace WebCamScrapper\Module\CamLandingGenerator\Infrastructure\Ui\Cli\TaskRunner;

use Exception;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use TheCodeFighters\Bundle\AuditorFramework\Common\Types\Application\CommandBus;
use TheCodeFighters\Bundle\AuditorFramework\Common\Utils\Assertion\InfrastructureAssertion;
use WebCamScrapper\Module\CamLandingGenerator\Application\Command\KeepUpdatedCamUnitById\CreateCamUnitCommand;

class KeepUpdatedCamUnitById extends Command
{
    /**
     * @var CommandBus
     */
    private $commandBus;


    public function __construct(
        CommandBus $commandBus
    ) {
        parent::__construct();
        $this->commandBus = $commandBus;
    }


    protected function configure()
    {
        $this
            ->setName('auditor_framework:task_runner:keep_updated_cam_unit_by_id')
            ->setDescription('Run command to create or update camUnit by CamUnitId ')
            ->addArgument('id', InputArgument::REQUIRED, 'id of Aggregate Unit');
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int|void|null
     * @throws Exception
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {

        InfrastructureAssertion::isUuid($input->getArgument('id'));

        $command = new CreateCamUnitCommand(
            $input->getArgument('id')
        );

        $this->commandBus->dispatch($command);

        $output->writeln('<action>Task Runner: create CamUnit  <highlight>%s</highlight> executed</action>');
    }
}
