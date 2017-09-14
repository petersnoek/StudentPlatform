<?php
/**
 * Created by PhpStorm.
 * User: DustDustin
 * Date: 05-Sep-17
 * Time: 11:58 AM
 */
?>


<div class="forum">
    <h1> forum  feature word later gestyled!</h1>
    <a href="<?php echo base_url();?>forums/create">Nieuwe forum</a>
    <?php
    /** $data['forums'] wordt hernoemd naar $forum en voor elke opgehaalde rij  voert  hij de onderstaande code uit */
    foreach ($forums as $forum): ?>
            <table>
                <tr>
                    <th>Forum</th>
                    <th>Maker</th>
                    <th>Reacties</th>
                </tr>
                <tr>
                    <td><a href="<?php echo site_url('/forums/'.$forum['id']); ?>"><?php echo $forum['title']; ?></a></td>
                    <td><?php echo $forum['creator']; ?></td>
                    <td>0</td>
                </tr>
            </table>
    <?php
    /** einde foreach  */
    endforeach; ?>
</div>
