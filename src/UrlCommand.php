<?php

namespace Zerotoprod\UrlCli;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Zerotoprod\Url\Url;

#[AsCommand(
    name: UrlCommand::signature,
    description: 'Returns components of a url'
)]
class UrlCommand extends Command
{
    public const signature = 'url-cli:url';
    public const url = 'url';

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln(
            json_encode(Url::from(parse_url($input->getArgument(self::url))), JSON_PRETTY_PRINT)
        );

        return Command::SUCCESS;
    }

    public function configure(): void
    {
        $this->addArgument(self::url, InputArgument::REQUIRED);
    }
}