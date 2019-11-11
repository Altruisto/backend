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

use App\Entity\Partner\ExcludedPage;
use App\Entity\Partner\ExcludedSubdomain;
use App\Entity\Partner\Partner;
use App\Form\Command\Partner\PartnerType;
use App\Manager\Partner\CategoryManager;
use App\Manager\Partner\PartnerManager;
use Doctrine\ORM\EntityManagerInterface;
use Matthias\SymfonyConsoleForm\Console\Helper\FormHelper;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class AddPartnerCommand
 */
class AddPartnerCommand extends Command
{
    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    /**
     * @var CategoryManager
     */
    private $categoryManager;

    /**
     * @var PartnerManager
     */
    private $partnerManager;

    /**
     * AddPartnerCommand constructor.
     *
     * @param EntityManagerInterface $entityManager
     * @param CategoryManager        $categoryManager
     * @param PartnerManager         $partnerManager
     */
    public function __construct(EntityManagerInterface $entityManager, CategoryManager $categoryManager, PartnerManager $partnerManager)
    {
        parent::__construct();

        $this->entityManager = $entityManager;
        $this->categoryManager = $categoryManager;
        $this->partnerManager = $partnerManager;
    }

    /**
     *
     */
    protected function configure()
    {
        $this
            ->setName('altruisto:add-partner')
            ->setDescription('Add new partner')
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
        /** @var FormHelper $formHelper */
        $formHelper = $this->getHelper('form');
        $formData = $formHelper->interactUsingForm(new PartnerType(), $input, $output);

        $partner = new Partner();
        $partner->setName($formData['name']);
        $partner->setLogoUrl($formData['logo_url']);
        $partner->setDomain($formData['domain']);
        $partner->setCheckoutUrlPartial($formData['checkoutUrlPartial']);
        $partner->setCookieExpirationTime($formData['cookieExpirationTime']);
        $partner->setDonation($formData['donation']);
        $partner->setAffiliationNetworkName($formData['affiliationNetworkName']);
        $partner->setExternalAffiliationId($formData['externalAffiliationId']);

        foreach($formData['excludedSubdomains'] as $excludedSubdomainData) {
            $excludedSubdomain = new ExcludedSubdomain();
            $excludedSubdomain->setName($excludedSubdomainData['name']);

            $partner->addExcludedSubdomain($excludedSubdomain);
        }

        foreach($formData['excludedPages'] as $excludedPageData) {
            $excludedPage = new ExcludedPage();
            $excludedPage->setName($excludedPageData['name']);

            $partner->addExcludedPage($excludedPage);
        }

        $partner->setCategory($formData['category']);

        $this->partnerManager->save($partner);

        $output->writeln('Partner successfully generated!');
    }
}
