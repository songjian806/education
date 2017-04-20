<?php 
return array (
  'event_subscriber' => 
  array (
    0 => 'Classroom\\Service\\Classroom\\Event\\ClassroomEventSubscriber',
    1 => 'Topxia\\Service\\Article\\Event\\ArticleEventSubscriber',
    2 => 'Topxia\\Service\\Card\\Event\\EventSubscriber',
    3 => 'Topxia\\Service\\Course\\Event\\CourseEventSubscriber',
    4 => 'Topxia\\Service\\Course\\Event\\CourseLessonEventSubscriber',
    5 => 'Topxia\\Service\\Course\\Event\\CourseMaterialEventSubscriber',
    6 => 'Topxia\\Service\\Course\\Event\\CourseMemberEventSubscriber',
    7 => 'Topxia\\Service\\File\\Event\\UploadFileEventSubscriber',
    8 => 'Topxia\\Service\\IM\\Event\\ConversationEventSubscriber',
    9 => 'Topxia\\Service\\Notification\\PushMessageEventSubscriber',
    10 => 'Topxia\\Service\\OpenCourse\\Event\\OpenCourseEventSubscriber',
    11 => 'Topxia\\Service\\PostFilter\\Event\\TokenBucketEventSubscriber',
    12 => 'Topxia\\Service\\Question\\Event\\QuestionEventSubscriber',
    13 => 'Topxia\\Service\\RefererLog\\Event\\OrderRefererLogEventSubscriber',
    14 => 'Topxia\\Service\\Sms\\Event\\SmsEventSubscriber',
    15 => 'Topxia\\Service\\Task\\Event\\TaskEventSubscriber',
    16 => 'Topxia\\Service\\Taxonomy\\Event\\TagEventSubscriber',
    17 => 'Topxia\\Service\\Testpaper\\Event\\TestpaperEventSubscriber',
    18 => 'Topxia\\Service\\Thread\\Event\\ThreadEventSubscriber',
    19 => 'Topxia\\Service\\User\\Event\\UserEventSubscriber',
    20 => 'Topxia\\Service\\User\\Event\\MessageEventSubscriber',
    21 => 'Topxia\\Service\\User\\Event\\OrderEventSubscriber',
    22 => 'Topxia\\Service\\User\\Event\\StatusEventSubscriber',
  ),
  'thread.event_processor' => 
  array (
    'classroom' => 'Classroom\\Service\\Classroom\\Event\\ClassroomThreadEventProcessor',
    'article' => 'Topxia\\Service\\Article\\Event\\ArticleEventSubscriber',
    'openCourse' => 'Topxia\\Service\\OpenCourse\\Event\\OpenCourseThreadEventProcessor',
  ),
);