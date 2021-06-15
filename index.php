<!DOCTYPE html>
<html lang="UTF-8">
    <head>
        <meta charset="UTF-8">
        <title>This is the movie club</title>
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
      <div class="header">
        <h1><img src="88.jpg" alt="Girl in a jacket"></h1>
      </div>
      <form name="login" action="login.php" method="post">
        <div class="imgcontainer">
          
        </div>
      
        <div class="container">
          <label for="uname"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="name" required>
      
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="password" required>
      
          <button type="submit">Login</button>
          <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label>
        </div>
      
        <div class="container" style="background-color:#f1f1f1">
          <button type="button" class="cancelbtn">Cancel</button>
          <span class="psw">New member? <a href="/signup.html">SignUp</a></span>
        </div>
      </form>

<table>
  <tr>
    <th>movie</th>
    <th>name</th>
    <th>content</th>
    <th>trailer</th>
  </tr>
  <tr>
    <td><img src="123.jpg" alt="Girl in a jacket" width="150" height="200"></td>
    <td>Avengers:Endgames</td>
    <td>After the devastating events of Avengers: Infinity War (2018), the universe is in ruins. With the help of remaining allies, the Avengers assemble once more in order to reverse Thanos' actions and restore balance to the universe.</td>
    <td><a href="https://www.youtube.com/watch?v=TcMBFSGVi1c&ab_channel=MarvelEntertainmentMarvelEntertainment">Avengers: Endgame trailer</a></td>
  </tr>
  <tr>
    <td><img src="kk.jpg" alt="Girl in a jacket" width="150" height="200"></td>
    <td>Frozen2</td>
    <td>Anna, Elsa, Kristoff, Olaf and Sven leave Arendelle to travel to an ancient, autumn-bound forest of an enchanted land. They set out to find the origin of Elsa's powers in order to save their kingdom.</td>
    <td><a href="https://www.youtube.com/watch?v=Zi4LMpSDccc&ab_channel=WaltDisneyAnimationStudiosWaltDisneyAnimationStudios%E5%B7%B2%E9%A9%97%E8%AD%89">Frozen2 trailer</a></td>
  </tr>
  <tr>
    <td><img src="kl.jpg" alt="Girl in a jacket" width="150" height="200"></td>
    <td>Dunkirk</td>
    <td>Allied soldiers from Belgium, the British Commonwealth and Empire, and France are surrounded by the German Army and evacuated during a fierce battle in World War II.</td>
    <td><a href="https://www.youtube.com/watch?v=F-eMt3SrfFU">dunkirk trailer</a>
    </td>
  </tr>
  <tr>
    <td><img src="lk.jpg" alt="Girl in a jacket" width="150" height="200"></td>
    <td>Astar is born</td>
    <td>A musician helps a young singer find fame as age and alcoholism send his own career into a downward spiral.</td>
    <td><a href="https://www.youtube.com/watch?v=nSbzyEJ8X9E&ab_channel=WarnerBros.PicturesWarnerBros.Pictures%E5%B7%B2%E9%A9%97%E8%AD%89">A star is born</a></td>
  </tr>
  
</table>
<button type="button" onclick="alert('Hello world!')">Click Me!</button>

    </body>
</html>