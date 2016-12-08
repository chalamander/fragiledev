<?php
  require('Pusher.php');


  $options = array(
    'encrypted' => true
  );
  $pusher = new Pusher(
    '01e18c2040acf98343e4',
    'ea1e9d94cf9589faad4c',
    '264669',
    $options
  );

  $data['message'] = 'dead';
  $pusher->trigger('test_channel', 'my_event', $data);
?>