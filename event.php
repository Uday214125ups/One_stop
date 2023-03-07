<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    

    <link rel="stylesheet" href="event_css.css">

    <title>Event creator</title>
</head>
<body>
    <header class="header">
      <h1 class="header-1">Event Details</h1>
      <button class="btn-2 justify" onclick="create()"> LOG OUT</button>
        <div class="bg-video">
            <video class="bg-video__content" autoplay loop muted>
                <source src="images/video_4.mp4" type="video/mp4">
            </video>
        </div>

        <div class="container">
        <form method=post action="submit_event_detail.php">
            <div class="mb-3">
              <label class="form-label">Event Name</label>
              <input type="text" name="event" class="form-control" id="name" >
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <input type="text" name="desc" class="form-control" id="des" placeholder="In 30 words">
              </div>
              <div class="mb-3">
                <label class="form-label">Date</label>
                <input type="date" name="date" class="form-control" id="date" placeholder="Eg:- 25 December">
              </div>

              <div class="mb-3">
                <label class="form-label">time</label>
                <input type="time" name="time" class="form-control" id="time" placeholder="Eg:- 9 pm">
              </div>

              <div class="mb-3">
<<<<<<< Updated upstream
=======
                <label class="form-label"> End time</label>
                <input type="time" name="time" class="form-control" id="time2" placeholder="Eg:- 9 pm">
              </div>


              <div class="mb-3">
>>>>>>> Stashed changes
                <label class="form-label">Venue</label>
                <input type="text" name="venue" class="form-control" id="venue" placeholder="Eg:- PALASIO ,Lucknow">
              </div>

              <div class="mb-3">
                <label class="form-label">Phone number</label>
                <input type="number" name="mobile" class="form-control" id="mobile" placeholder="Eg:-898546586">
              </div>

              <div class="mb-3">
                <label class="form-label">Email Id</label>
                <input type="email" name="email" class="form-control" id="mail" placeholder="Eg:-898546586">
              </div>


              <div class="mb-3">
                <label class="form-label">Price</label>
                <input type="Number" name="price" id="price" class="form-control" placeholder="Eg:- 2000">
              </div>

            <input type="submit" name="save" class="btn-1" onclick="pass()">
          </form>
          <br>
    </div>
    </header>
</body>
</html>