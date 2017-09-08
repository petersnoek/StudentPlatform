<?php
/**
 * Created by PhpStorm.
 * User: DustDustin
 * Date: 05-Sep-17
 * Time: 11:58 AM
 */
?>
<<<<<<< HEAD

<div class="forum">
    <a href="<?php echo base_url();?>index.php/forums/create">Nieuwe forum</a>

    <?php foreach ($forums as $forum): ?>
            <table>
                <tr>
                    <th>Forum</th>
                    <th>Maker</th>
                    <th>Reacties</th>
                </tr>
                <tr>
                    <td><a href="<?php echo site_url('index.php/forums/'.$forum['id']); ?>"><?php echo $forum['title']; ?></a></td>
                    <td><?php echo $forum['creator']; ?></td>
                    <td>0</td>
                </tr>
            </table>

    <?php endforeach; ?>
</div>
>>>>>>> 78f774ff93f411f596c5d30517cf9606113fd42e
