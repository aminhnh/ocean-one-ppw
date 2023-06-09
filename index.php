<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ocean One</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./style/style.css" />
  </head>
  <body>
    <nav class="navigation-bar w-100">
      <a href="#">
        <img src="./img/main-logo.png" alt="logo" class="logo" />
      </a>
      <div class="d-flex justify-content-center align-items-center">
        <ul>
          <li><a href="">Actions</a></li>
          <li><a href="">Resources</a></li>
          <li><a href="">Projects</a></li>
          <li><a href="">Explore</a></li>
        </ul>
      </div>
    </nav>
    <div
      class="page-1 text-center vh-100 d-flex flex-column justify-content-center"
    >
      <h1 class="mb-0">Save Our Ocean</h1>
      <p class="mb-0">
        12 million tonnes of plastic finds its way into the ocean every single
        year. By 2050 plastic pollution will weigh more than the fish in the sea
      </p>
      <span>
        <button onclick="takeAction()" class="btn-main">Take Action</button>
      </span>
    </div>
        <?php
        include'conn.php';

        // Execute the query
        $query1 = $conn->query("SELECT * FROM page_02");
        $query2 = $conn->query("SELECT * FROM page_02 LIMIT 1, 1");
        $query3 = $conn->query("SELECT * FROM page_02 LIMIT 2, 1");

        $row1 = $query1->fetch_assoc();
        $row2 = $query2->fetch_assoc();
        $row3 = $query3->fetch_assoc();
        ?>


        <div class="page-2 d-flex flex-column justify-content-center">
          <div class="container">
        <div class="row">
          <h2>OFFSET YOUR PLASTIC FOOTPRINT</h2>
        </div>
        <div class="row py-4">
          <div class="col">
            <h4><?php echo $row1['title']; ?></h4>
          </div>
          <div class="col">
            <h4><?php echo $row2['title']; ?></h4>
          </div>
          <div class="col">
            <h4><?php echo $row3['title']; ?></h4>
          </div>
        </div>
        <div class="row">
          <div class="col text-justify" <?php echo "id=".$row1['id']."\"";?> >
            <p>
            <?php echo $row1['paragraph']; ?> 
            </p>
          </div>
          <div class="col text-justify" <?php echo "id=".$row2['id']."\"";?>>
            <p>
            <?php echo $row2['paragraph']; ?> 
            </p>
          </div>
          <div class="col text-justify">
            <p>
            <?php echo $row3['paragraph']; ?> 
            </p>
            </div>
            </div>
            <div class="row">
            <div class="col">
            <button class="btn btn-primary">
              <?php echo $row1['button_text']; ?> 
            </button>
            <span id="editButton">
            <button class="btn btn-primary" onclick="editText()">Edit</button>
            </span>
            </div>
          <div class="col">
            <button class="btn btn-primary">
              <?php echo $row2['button_text']; ?> 
            </button>
            </div>
            <div class="col">
            <button class="btn btn-primary">
              <?php echo $row3['button_text']; ?> 
            </button>
            </div>
            </div>
            </div>
            </div>
            
            <div
            class="page-3 black text-center vh-100 d-flex flex-column justify-content-center"
            >
            <div class="container">
            <div class="row black">
            <h2>MAKE YOUR IMPACT</h2>
            </div>
            <div class="row">
            <div class="col">
            <img
            src="./icons/trash.png"
            alt="Throwing away trash logo"
            class="icon"
            />
          </div>
          <div class="col">
            <img
              src="./icons/sales.png"
              alt="Product sales logo"
              class="icon"
            />
          </div>
          <div class="col">
            <img
              src="./icons/epidemiology.png"
              alt="Community action logo"
              class="icon"
            />
          </div>
        </div>
        <div class="row black">
          <div class="col">
            <p class="black">Commit To Removing a Specific Amount</p>
          </div>
          <div class="col">
            <p class="black">Tie Removal To Product Sales</p>
          </div>
          <div class="col">
            <p class="black">Incentivize Community Action</p>
          </div>
        </div>
      </div>
    </div>

    <div class="page-4 d-flex flex-column justify-content-center">
      <div class="container">
        <section>
          <div class="row">
            <h5>PROJECT 1:</h5>
            <h2>OCEANBOUND CLEAN UP</h2>
          </div>
          <div class="row">
            <div class="col p-0">
              <img
                src="./img/john-cameron-FMrZLPdDyx4-unsplash.jpg"
                alt=""
                class="proj-img"
              />
            </div>
            <div class="col">
              <h4>PROBLEMS</h4>
              <p>
                Plastic recycling generates plastic waste effluent as a standard
                part of the process. This dirty discharge known as "Mud" is at
                risk of being discharged into the wastewater and, in the
                best-case, is usually taken to the nearest landfill.
              </p>
            </div>
          </div>

          <div class="row">
            <div class="col">
              <h4>SOLUTION</h4>
              <p>
                Repurposes the “Mud” into useful building materials. It's
                composition is perfect for producing bricks! Unfortunately,
                these recycled plastic compound bricks are slightly more
                expensive than standard building bricks, so Impac+ program
                incentivizes the reuse of the “Mud” in the bricks by making them
                competitive on the open market.
              </p>
            </div>
            <div class="col">
              <img
                src="./img/john-cameron-FMrZLPdDyx4-unsplash.jpg"
                alt=""
                class="proj-img"
              />
            </div>
          </div>
        </section>

        <section>
          <div class="row">
            <h5>PROJECT 2:</h5>
            <h2>FISHING NET RECOVERY</h2>
          </div>
          <div class="row">
            <div class="col">
              <img
                src="./img/john-cameron-FMrZLPdDyx4-unsplash.jpg"
                alt=""
                class="proj-img"
              />
            </div>
            <div class="col">
              <h4>PROBLEMS</h4>
              <p>
                Fishing gear - nets and ropes - pose a significant risk to sea
                life if cut away in the ocean. Unfortunately, incentives do not
                exist to recover this gear so at the end of its life, most gets
                landfilled or simply cut away at sea. It's a huge reason for why
                fishing nets are the largest ocean plastic polluter.
              </p>
            </div>
          </div>

          <div class="row">
            <div class="col">
              <h4>SOLUTION</h4>
              <p>
                We provides the funds needed to incentivize collection and
                recycling of this gear. This program creates a pathway for the
                reclamation of end of life fishing gear.
              </p>
            </div>
            <div class="col">
              <img
                src="./img/john-cameron-FMrZLPdDyx4-unsplash.jpg"
                alt=""
                class="proj-img"
              />
            </div>
          </div>
        </section>
      </div>
    </div>

    <div class="page-5 vh-100 d-flex flex-column justify-content-center">
      <div class="container">
        <div class="row text-center">
          <h2>GET IN TOUCH</h2>
        </div>
        <div class="row">
          <div class="col">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d174372.7837762417!2d113.98925328472293!3d22.31298625289441!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34040161f4460bb1%3A0xac9661f39722a25!2sOcean%20One!5e0!3m2!1sen!2sid!4v1684981846570!5m2!1sen!2sid"
              class="mar-2"
              width="600"
              height="450"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>
          <div class="col mar-2">
            <form action="">
              <div class="row">
                <input
                  placeholder="Name"
                  class="form"
                  type="text"
                  name="name"
                  id="name"
                />
              </div>
              <div class="row">
                <input
                  placeholder="Email"
                  type="email"
                  name="email"
                  id="email"
                  class="form"
                />
              </div>
              <div class="row">
                <textarea
                  placeholder="Write your message here..."
                  cols="25"
                  rows="5"
                  class="form"
                ></textarea>
              </div>
              <div class="row">
                <span>
                  <button class="btn-secondary">Send</button>
                </span>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="container footer">
        <footer
          class="d-flex flex-wrap justify-content-between align-items-center border-top"
        >
          <div
            class="col-md-4 d-flex align-items-center justify-content-center"
          >
            <a href="#">
              <img src="./img/main-logo.png" alt="logo" class="logo" />
            </a>
          </div>
          <div class="d-flex justify-content-center align-items-center">
            <p>&#169; 2023 Ocean One, Inc</p>
          </div>
          <ul class="nav col-md-4 justify-content-end">
            <li><a href="">Newsletter</a></li>
            <li><a href="">Privacy Policy</a></li>
            <li><a href="">FAQs</a></li>
          </ul>
        </footer>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
    <script src="./script/script.js"></script>
  </body>
</html>
