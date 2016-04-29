<?php
     $xdata = array(
          'foo'    => 'bar',
          'baz' => array('green','blue')
     );
?>
<html>
<script type="text/javascript">
   // var xdata = <?php echo json_encode($xdata); ?>;

//    alert(xdata['foo']);
  //  alert(xdata['baz'][0]);

    // Dot notation can be used if key/name is simple:
    alert(xdata.foo);
    alert(xdata.baz[0]);
</script>


</html>