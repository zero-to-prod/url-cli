<?php

namespace Zerotoprod\UrlCli\Parse;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Zerotoprod\Url\Url;

/**
 * @link https://github.com/zero-to-prod/url-cli
 */
#[AsCommand(
    name: ParseCommand::signature,
    description: 'Parses a URL string and ensures that it starts with a supported protocol.'
)]
class ParseCommand extends Command
{
    /**
     * @link https://github.com/zero-to-prod/url-cli
     */
    public const signature = 'url-cli:parse';
    /**
     * @link https://github.com/zero-to-prod/url-cli
     */
    public const url = 'url';

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $Options = ParseOptions::from([...$input->getArguments(), ...$input->getOptions()]);

        $output->writeln(
            json_encode(
                Url::parse(
                    $Options->url,
                    $Options->default_protocol,
                    $Options->protocols
                ),
                JSON_PRETTY_PRINT
            )
        );

        return Command::SUCCESS;
    }

    /**
     * @link https://github.com/zero-to-prod/url-cli
     */
    public function configure(): void
    {
        $this->addArgument(ParseOptions::url, InputArgument::REQUIRED);
        $this->addOption(ParseOptions::default_protocol, mode: InputOption::VALUE_OPTIONAL, description: 'The default protocol', suggestedValues: ['https://']);
        $this->addOption(ParseOptions::protocols, mode: InputOption::VALUE_OPTIONAL, description: 'List of protocols to select from');
    }
}