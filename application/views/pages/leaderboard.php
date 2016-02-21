<div class= "container">
    <br>
    <img src="<?= base_url('assets/b4/Schnitzel1.png') ?>" class="img-fluid" alt="Generic responsive image">
    <br>

    <table class="table table-inverse" id="regular" style="margin-top:60px">
    <thead>
    <tr>
        <th>Rank </th>
        <th>Name</th>
        <th>Level</th>
        <th>College</th>
    </tr>
    </thead>
    <tbody>
    <?php if( ! empty($reg)): ?>
    <?php foreach ($reg as $user): ?>
    <?php if($user['name']!=''&&$user['name']!=NULL):?>
    <tr>
        <td><?php echo $user['rank'];?> </td>
        <td><?php
        if($user['rank']>$nop)
            echo $user['name'];
        else
            echo "########" ;?></td>
        <td><?php echo $user['level'] ?></td>
        <td><?php
            if($user['rank']>$nop)
                echo $user['college'];
            else
                echo "########"; ?></td>
    </tr>
    <?php endif;?>
    <?php endforeach ?>
    <?php endif; ?>
    </tbody>
    </table>
</div>
