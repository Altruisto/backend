<?php

/*
 * This file is part of the Altruisto software.
 *
 * (c) Jakub Szcześniak <jakub.szczesniak@altruisto.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Command\Partner;

use App\Entity\Partner\Category;
use App\Manager\Partner\CategoryManager;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\Question;

/**
 * Class AddCategoryCommand
 */
class AddCategoryCommand extends Command
{
    /**
     * @var CategoryManager
     */
    private $categoryManager;

    /**
     * AddCategoryCommand constructor.
     *
     * @param CategoryManager $categoryManager
     */
    public function __construct(CategoryManager $categoryManager)
    {
        parent::__construct();
        $this->categoryManager = $categoryManager;
    }

    /**
     *
     */
    protected function configure()
    {
        $this
            ->setName('altruisto:add-category')
            ->setDescription('Add partner category')
        ;
    }

    /**
     * @param InputInterface  $input
     * @param OutputInterface $output
     *
     * @return int|null|void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $category = new Category();
        $helper = $this->getHelper('question');

        $question = new Question('Please enter the name of the partner category: ');
        $category->setName($helper->ask($input, $output, $question));

        $this->categoryManager->save($category);

        $output->writeln('Category successfully generated!');
    }
}
