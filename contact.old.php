<?php 
include ('core/init.php');
require 'libraries/Database.php';

  //NEW PDO
  $db = new Database;
  //Requète
  $db->query("SELECT * FROM `ca3`");
  //ResultSet
  $contacts = $db->resultset();

?>
            <div class="row">
              <div class="large-12 columns">
                <table>
                  <thead>
                    <tr>
                      <th width="200">Nom</th>
                      <th width="200">Prénom</th>
                      <th width="200">Email</th>
                      <th width="200">Téléphone</th>
                      <th width="200">Ville</th>
                      <th width="200"> Actions</th>
                    </tr>
                  </thead>
                <tbody>
                  <?php foreach($contacts as $contact) : ?>
                    <tr>

                      <td><a href="contact.html"> <?php echo $contact->nom; ?></a></td>
                      <td><?php echo $contact->prenom; ?></td>
                      <td><?php echo $contact->email; ?></td>
                      <td><?php echo $contact->tel; ?></td>
                      <td><?php echo $contact->ville; ?></td>

                      <td>
                        <ul class="button-group radius">
                          <li>
                            <a href="#" class="button tiny" data-reveal-id="editModal<?php echo $contact->contact_id; ?>" data-contact-id="<?php echo $contact->contact_id; ?>">Modifier</a>
                            <div id="editModal<?php echo $contact->contact_id; ?>" data-cid="<?php echo $contact->contact_id; ?>" class="reveal-modal editModal" data-reveal>
                    
                                <!---------------FORMULAIRE MODIFICIATION CONTACT-------------------------->
                                <h2> Modifier Contact </h2>
                                <form id="editContact" action="#" method="post">
                                    <div class="grid-container">
                                      <div class="grid-x grid-padding-x">

                                        <div class="medium-6 cell">
                                          <label>Nom
                                            <input name="nom" type="text" placeholder="Nom du Contact" value="<?php echo $contact->nom; ?>" required/>
                                          </label>
                                        </div>

                                        <div class="medium-6 cell">
                                          <label>Prénom
                                            <input name="prenom" type="text" placeholder="Prénom du Contact" value="<?php echo $contact->prenom; ?>" required/>
                                          </label>
                                        </div>

                                        <div class="medium-6 cell">
                                          <label>Email
                                            <input name="email" type="email" placeholder="Email" class="email-input" value="<?php echo $contact->email; ?>" required/>
                                          </label>
                                        </div>

                                        <div class="medium-6 cell">
                                          <label>Téléphone
                                            <input name="tel" type="text"  maxlength="10" minlength="10" placeholder="Téléphone" class="phone-input" value="<?php echo $contact->tel; ?>" required/>
                                          </label>
                                        </div>

                                        <div class="medium-6 cell">
                                          <label>Ville
                                            <select name="ville">
                                              <option value="Paris" <?php if($contact->ville == 'Paris') {echo 'selected';} ?>> Paris</option>
                                              <option value="Lyon"<?php if($contact->ville == 'Lyon') {echo 'selected';} ?>> Lyon</option>
                                              <option value="Marseille"<?php if($contact->ville == 'Marseille') {echo 'selected';} ?>> Marseille</option>
                                            </select>
                                          </label>
                                        </div>

                                          <input type="hidden" name="contact_id" value="<?php echo $contact->contact_id; ?>" ></input>
                                          <input type="submit" class="add-btn button right small" value="submit"></input>
                                          <a class="close-reveal-modal">&#215;</a>

                                        </div>
                                    </div>
                                </form>
                                        <!---------------FORMULAIRE MODIFICIATION CONTACT-------------------------->
                                      </div>
                                    </li>
                                        <li>
                                            <form id="deleteContact" action="#" method="post">
                                            <input type="hidden" name="contact_id" value=" <?php echo $contact->contact_id; ?>" />
                                            <input type="submit" class="delete-btn button tiny secondary alert" value="Supprimer" />
                                            </form>
                                        </li>
                                    </ul>
                              </td>
                          </tr>
                        <?php endforeach; ?>
                   </tbody>
               </table>
            </div>