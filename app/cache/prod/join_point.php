<?php 
return array (
  'importer' => 
  array (
    'course-member' => 'Topxia\\Service\\Importer\\CourseMemberImporter',
    'classroom-member' => 'Topxia\\Service\\Importer\\ClassroomMemberImporter',
  ),
  'order' => 
  array (
    'course' => 
    array (
      'processor' => 'Topxia\\Service\\Order\\OrderProcessor\\CourseOrderProcessor',
      'order_show_template' => 'TopxiaWebBundle:Order:order-course.html.twig',
    ),
    'classroom' => 
    array (
      'processor' => 'Topxia\\Service\\Order\\OrderProcessor\\ClassroomOrderProcessor',
      'order_show_template' => 'TopxiaWebBundle:Order:classroom.html.twig',
    ),
    'vip' => 
    array (
      'processor' => 'Topxia\\Service\\Order\\OrderProcessor\\VipOrderProcessor',
      'order_show_template' => 'TopxiaWebBundle:Order:vip.html.twig',
    ),
    'coin' => 
    array (
      'processor' => 'Topxia\\Service\\Order\\OrderProcessor\\CoinOrderProcessor',
    ),
    'groupSell' => 
    array (
      'processor' => 'Topxia\\Service\\Order\\OrderProcessor\\GroupSellOrderProcessor',
      'order_show_template' => 'GroupSellBundle:GroupSell:Order/group_sell.html.twig',
    ),
  ),
);