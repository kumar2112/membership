<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Region;
use AppBundle\Entity\Member;

class MemberController extends Controller
{
    public function addAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $regions=$em->getRepository("AppBundle:Region")->findAll();
        if ($request->getMethod() == 'POST') {
              $em = $this->getDoctrine()->getManager();
              $member=new Member();
              $member_name=$request->request->get('member_name');
              $member_email=$request->request->get('member_email');
              $member_phone=$request->request->get('member_phone');
              $member_address=$request->request->get('member_address');
              $region_id=$request->request->get('member_region');
              $region=$em->getRepository("AppBundle:Region")->findOneBy(array('id'=>$region_id));

              $memberHaveRegion=$em->getRepository("AppBundle:Member")->findOneBy(array('email'=>$member_email,'memberRegion'=>$region));

              if(!$memberHaveRegion){
                   $member->setName($member_name);
                   $member->setEmail($member_email);
                   $member->setMobileNumber($member_phone);
                   $member->setAddress($member_address);
                   $member->setMemberRegion($region);
                   $em->persist($member);
                   $em->flush();
              }else{
                  echo "The User Is already registered with a region";
              }

        }
        return $this->render('AppBundle:Member:add.html.twig', array(
            'regions'=>$regions
        ));
    }

}
