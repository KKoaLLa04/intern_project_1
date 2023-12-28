<?php if (!empty($data['exam'])) :
    $item = $data['exam'] ?>
<h4><?php echo $item['title'] ?></h4>
<p class="text-center">Môn: <b><?php echo $item['name'] ?></b></p>
<div class="row">
    <div class="col-8">
        <?php endif; ?>
        <img src="<?php echo _WEB_HOST_ROOT ?>/uploads/<?php echo $item['images'] ?>" alt="" width="100%">
    </div>

    <div class="col-4">
        <?php
            echo html_entity_decode($item['content']);
            ?>
    </div>
</div>