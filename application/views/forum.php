<?php
/**
 * Created by PhpStorm.
 * User: DustDustin
 * Date: 05-Sep-17
 * Time: 11:58 AM
 */
?>


<div class="forum">
    <h1>Forums</h1>

    <a class="create_link" href="<?php echo base_url();?>forums/create"><i class="fa fa-plus" aria-hidden="true"></i> Nieuwe forum</a>
    <?php
    /** $data['forums'] wordt hernoemd naar $forum en voor elke opgehaalde rij  voert  hij de onderstaande code uit */
    foreach ($forums as $forum): ?>
            <table class="table">
                <thead>
                    <tr>
                        <th>Forum</th>
                        <th>Maker</th>
                        <th><i class="fa fa-comments" aria-hidden="true"></i> Reacties</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="forum_title"><a class="title_link" href="<?php echo site_url('/forums/'.$forum['id']); ?>"><?php echo $forum['title']; ?></a></td>
                        <td><?php echo $forum['creator']; ?></td>
                        <td>0</td>
                    </tr>
                </tbody>
            </table>
    <?php
    /** einde foreach  */
    endforeach; ?>
</div>
