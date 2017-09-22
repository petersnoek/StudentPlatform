<h1>Gebruikers</h1>

                <div class="box-body">
                    <table class="data-table table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Gebruikersnaam</th>
                            <th>Email</th>
                            <th>Leerlingennummer</th>
                            <th>Klas</th>
                            <th>Geslacht</th>
                            <th>Geboortedatum</th>
                            <th>Hobby</th>
                            <th>Motto</th>
                            <th data-sortable="false">Acties</th>
                        </tr>
                        </thead>
                        <tbody>
						
						<?php
                        if(isset($users)):
                            foreach($users as $row):
                        ?>
                                <tr>
                                    <td>
                                        <?php echo $row['username']; ?>
                                    </td>
                                    <td>
                                    	<?php echo $row['email']; ?> 
                                    </td>
                                    <td>
                                        <?php echo $row['leerling_nr']; ?>
                                    </td>
                                    <td>
                                       <?php echo $row['klas']; ?>
                                    </td>
                                    <td>
										<?php echo $row['geslacht']; ?>
                                    </td>
                                    <td>
										<?php echo $row['geboortedatum']; ?>
                                    </td>
                                    <td>
										<?php echo $row['hobby']; ?>
                                    </td>
                                    <td>
										<?php echo $row['motto']; ?>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-default btn-flat"><i class="fa fa-pencil"></i></a>
                                        </div>
                                    </td>
                                </tr>
                        <?php
                            endforeach;
                        endif;
                        ?>
                        </tbody>
                    </table>
                </div>