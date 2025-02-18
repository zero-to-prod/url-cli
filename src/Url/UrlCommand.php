<?php

namespace Zerotoprod\UrlCli\Url;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Zerotoprod\Url\Url;

/**
 * @link https://github.com/zero-to-prod/url-cli
 */
#[AsCommand(
    name: UrlCommand::signature,
    description: 'Returns components of a url'
)]
class UrlCommand extends Command
{
    /**
     * @link https://github.com/zero-to-prod/url-cli
     */
    public const signature = 'url-cli:url';
    /**
     * @link https://github.com/zero-to-prod/url-cli
     */
    public const url = 'url';

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln(
            json_encode(Url::from(parse_url($input->getArgument(self::url))), JSON_PRETTY_PRINT)
        );

        return Command::SUCCESS;
    }

    /**
     * @link https://github.com/zero-to-prod/url-cli
     */
    public function configure(): void
    {
        $this->addArgument(self::url, InputArgument::REQUIRED);
    }
}