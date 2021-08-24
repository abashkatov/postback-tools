<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Postback;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class PostbackController extends AbstractController
{
  private EntityManagerInterface $em;

  public function __construct(EntityManagerInterface $em) {
    $this->em = $em;
  }

  #[Route('/postback/cps', name: 'postback_cps')]
  public function cps(Request $request): Response
  {
    $postback = new Postback();

    $postback->setSubAffId($request->get('sub_aff_id') ?? '');
    $postback->setSubId1($request->get('sub_id1') ?? '');
    $postback->setSubId2($request->get('sub_id2') ?? '');
    $postback->setSubId3($request->get('sub_id3') ?? '');
    $postback->setSubId4($request->get('sub_id4') ?? '');
    $postback->setSubId5($request->get('sub_id5') ?? '');
    $postback->setSubId6($request->get('sub_id6') ?? '');

    $conversionTime = $request->get('_p_conversion_time') ?? 'now';
    $postback->setConversionTime(new \DateTime($conversionTime));

    $postback->setConversionType('cps');
    $postback->setConversionStatus($request->get('unique_install') ?? '');
    $postback->setConversionResult($request->get('install_result') ?? '');

    $postback->setParams($request->query->all());

    $this->em->persist($postback);
    $this->em->flush();
    return $this->json([
      'message' => 'Ok',
    ]);
  }

  #[Route('/postback/cpi', name: 'postback_cpi')]
  public function cpi(Request $request): Response
  {
    $postback = new Postback();

    $postback->setSubAffId($request->get('sub_aff_id') ?? '');
    $postback->setSubId1($request->get('sub_id1') ?? '');
    $postback->setSubId2($request->get('sub_id2') ?? '');
    $postback->setSubId3($request->get('sub_id3') ?? '');
    $postback->setSubId4($request->get('sub_id4') ?? '');
    $postback->setSubId5($request->get('sub_id5') ?? '');
    $postback->setSubId6($request->get('sub_id6') ?? '');

    $conversionTime = $request->get('_p_conversion_time') ?? 'now';
    $postback->setConversionTime(new \DateTime($conversionTime));

    $postback->setConversionType('cpi');
    $postback->setConversionStatus($request->get('unique_install') ?? '');
    $postback->setConversionResult($request->get('install_result') ?? '');

    $postback->setParams($request->query->all());

    $this->em->persist($postback);
    $this->em->flush();
    return $this->json([
      'message' => 'Ok',
    ]);
  }
}
