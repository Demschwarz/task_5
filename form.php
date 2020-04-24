<!DOCTYPE html>
<html lang="ru">
  <head>
    <style>
/* Сообщения об ошибках и поля с ошибками выводим с красным бордюром. */
      .error {
      border: 2px solid red;
      }
      .error1{
      color:red;
      font-weight: bold;
      }
      .mesa {
      font-weight: bold;
      }
      #messages{
      margin-left: 32vh;
      }
    </style>
    <meta charset="utf-8">
    <title>Task 5</title>
  </head>
  <body>
    
<?php
  if (!empty($messages)) {
  print('<div id="messages">');
  // Выводим все сообщения.
  foreach ($messages as $message) {
    print($message);
  }
  print('</div>');
}

// Далее выводим форму отмечая элементы с ошибками классом error
// и задавая начальные значения элементов ранее сохраненными.
?>
      <div>
          <div">
            <h2>Your data</h2>
            <?php  if(empty($_SESSION['login'])) print('
            <a href="login.php">
   			<button type="button">AuTorisation</button>
  			</a>');
  			?>
            <form action="index.php" method="POST">
              <label>
              Имя
              <br>
              <input name="fio" <?php if ($errors['fio']) {print 'class="error"';} ?> value="<?php print $values['fio']; ?>" placeholder="Name">
              </label>
              <br>
              <label>
              Email
              <br>
              <input name="email" <?php if ($errors['email']) {print 'class="error"';} ?> value="<?php print $values['email']; ?>" type="email" placeholder="yourmail@gmail.com">
              </label>
              <br>
              <label>
              BirthDate
              <br>
              <input name="bday" <?php if ($errors['bday']) {print 'class="error"';} ?> value="<?php print $values['bday']; ?>" type="date">
              </label>
              <br>
              <p>
                Gender
              </p>
              <br>
              <label <?php if ($errors['sex']) {print 'class="error1"';} ?>>
              <input type="radio" <?php if($values['sex'] == "MAN") {print 'checked="checked"';}?> name="sex" value="MAN"> М
              </label>
              <label <?php if ($errors['sex']) {print 'class="error1"';} ?>>
              <input type="radio" <?php if($values['sex'] == "WOM") {print 'checked="checked"';}?> name="sex" value="WOM"> Ж
              </label>
              <br>
              <p>
                Lungs
              </p>
              <br>
              <label <?php if ($errors['lim']) {print 'class="error1"';} ?>>
              <input type="radio" <?php if($values['lim'] == "4") {print 'checked="checked"';}?> name="lim" value="4"> 4
              </label>
              <label <?php if ($errors['lim']) {print 'class="error1"';} ?>>
              <input type="radio"  <?php if($values['lim'] == "3") {print 'checked="checked"';}?> name="lim" value="3"> 3
              </label>
              <label <?php if ($errors['lim']) {print 'class="error1"';} ?>>
              <input type="radio"  <?php if($values['lim'] == "2") {print 'checked="checked"';}?> name="lim" value="2"> 2
              </label>
              <label <?php if ($errors['lim']) {print 'class="error1"';} ?>>
              <input type="radio"  <?php if($values['lim'] == "1") {print 'checked="checked"';}?> name="lim" value="1"> 1
              </label>
              <label <?php if ($errors['lim']) {print 'class="error1"';} ?>>
              <input type="radio"  <?php if($values['lim'] == "0" && (isset($_COOKIE['lim_value'])||isset($user_data[0]['lim']))) {print 'checked="checked"';}?> name="lim" value="0"> 0
              </label>
              <br>
              <label>
                Superskills
                <br>
                <select name="abilities[]" multiple="multiple" <?php if ($errors['abil']) {print 'class="error"';} ?>>
                  <option  <?php if($values['god'] == "1") {print 'selected="selected"';}?> value="god">Immortality</option>
                  <option  <?php if($values['twalk'] == "1") {print 'selected="selected"';}?>value="twalk">Wallhack</option>
                  <option  <?php if($values['fly'] == "1") {print 'selected="selected"';}?>value="fly">Levitation</option>
                </select>
              </label>
              <br>
              <label>
              Biography
              <br>
              <textarea name="bio" <?php if ($errors['bio']) {print 'class="error"';} ?> placeholder="Your biography"><?=$values['bio'];?></textarea>
              </label>
              <br>
              <label <?php if ($errors['yes']) {print 'class="error1"';} ?>>
              <input type="checkbox" <?php if($values['yes'] == "1") {print 'checked="checked"';}?> name="yess" value="1"> I agree with all terms
              </label>
              <br>
              <button class="btn btn-success">Send</button>
            </form>
          </div>
          <div>
          </div>
        </div>
  </body>
</html>
