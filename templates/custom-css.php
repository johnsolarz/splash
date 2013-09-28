<?php
$logo = get_field('logo', 'option');
?>

<style>
.navbar-brand {
  background: url('<?php echo $logo['url']; ?>') no-repeat 0 0;
  background-size: 100%;
  height: 100px;
  overflow: hidden;
  text-indent: -9999px;
  width: 100px;
}
</style>
