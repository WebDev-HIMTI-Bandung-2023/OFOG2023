<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
        $USE_BOOTSTRAP = true;
        $TITLE = 'Testimonies';
        require_once('components/head.php');
		include('function/connection.php');
		$query = mysqli_query($koneksi, "SELECT * FROM testimonies_main ORDER BY `name` ASC");
    	$testimonies = array();
    	while ($row = mysqli_fetch_array($query)) {
        	$testimonies[] = $row;
    	}
		$query = mysqli_query($koneksi, "SELECT * FROM testimonies_experiences ORDER BY `priority` ASC");
		$experiences = array();
		while ($row = mysqli_fetch_array($query)) {
			$experiences[$row["id"]][] = $row["experience"];
    	}
    ?>
    <style>
      body {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        background-color: #0c0217;
      }

      /*.title > h1{
            font-size: 3rem;
            margin: 0;
            font-weight: 900;
        }*/

      .title > hr {
        width: 30vw;
        background-color: rgba(19, 71, 55, 1);
        height: 5px;
        margin: 0;
      }

      .profwrapper {
        flex-direction: row;
        border-radius: 20px;
        padding: 0;
        background-color: rgb(65, 89, 167);
      }

      .profselector {
        width: 30%;
        padding: 20px;
		flex-wrap: wrap;
		justify-content: space-between;
      }

      .profselector__img {
        width: 120px;
        height: 120px;
        opacity: 50%;
        transition: 0.5s;
        border: solid 0px;
		margin: 10px;
      }

      .profselector__img:hover {
        opacity: 100%;
      }

      .profselector__img--active {
        border: solid 10px #1b97d4;
        opacity: 100%;
      }

      .profdesc {
        border-radius: 20px;
        padding: 20px;
        color: white;
        background-color: #0c0217;
        width: 70%;
        display: flex;
		align-items: flex-start;
      }

      .profdesc__sumimg {
        width: 100%;
      }

	  .profdesc__name{
		font-size: 40px;
		font-weight: 900;
		line-height: 40px;
	  }

	  .profdesc__job{
		font-size: 18px;
		font-weight: 300;
	  }

	  .profdesc__years{
		font-weight: 600;
	  }

	  .profdesc__story::before, .profdesc__story::after{
		font-family: "Jacques Francois", sans serif;
		white-space: pre;
		position:absolute;
		font-size: 150px;
		line-height: 0px;
	  }

	  .profdesc__story::before{
		content: "\201C\A";
		top:40px;
		left:40px;
	  }
	  
	  .profdesc__story::after{
		content: "\A\201D";
		right:-10px;
		bottom:-80px;
	  }

      .profdesc__story {
        text-align: justify;
		position:relative;
        font-weight: 300;
        padding-left: 50px;
        max-width: 65%;
		padding-top: 50px;
      }

      .profdesc__story b {
        font-weight: 900;
      }

      .profdesc--hidden {
        display: none !important;
      }

      @media screen and (max-width: 768px) {
        .profwrapper {
          flex-direction: column;
        }
        .profselector {
          width: 100%;
		  flex-wrap: nowrap;
		  overflow-x: scroll;
		  justify-content: flex-start;
        }
        .profdesc {
          width: 100%;
          flex-direction: column;
          text-align: center;
		  align-items:stretch;
        }
        .profdesc__story {
          max-width: 100%;
		  padding-left: 0;
        }
        .profdesc__sumimg {
          width: 50%;
        }
		.profdesc__story::before{
		  left:-90px;
		  top:110px;
	  	}
	  	.profdesc__story::after{
		  right:-80px;
		  bottom:-20px;
	  	}
      }
    </style>
    <script>
      let activeProfile;

      function testimoniesImgClick(name) {
        if (name === activeProfile) {
          return;
        }
        const newImage = document.getElementById(name + "Photo");
		const newProfile = document.getElementById(name + "Profile");
        newImage.classList.add("profselector__img--active");
		newProfile.classList.remove("profdesc--hidden");
		
		const oldImage = document.getElementById(activeProfile + "Photo");
        const oldProfile = document.getElementById(activeProfile + "Profile");
		activeProfile = name;
		if(!oldImage || !oldProfile){
			return
		}
		oldImage.classList.remove("profselector__img--active");
        oldProfile.classList.add("profdesc--hidden");
      }
    </script>
  </head>
  <body>
    <?php require_once('components/navbar.php'); ?>
    <main class="mx-auto" style="max-width: 1536px">
      <h1 class="title white">
        <span>TESTIMONIES</span>
      </h1>
      <br />
      <div class="d-flex container profwrapper">
        <div
          class="d-flex align-items-center profselector"
        >
		<?php
		$first = true;
		if($testimonies != NULL && count($testimonies) > 0){
			foreach ($testimonies as $testimony) {
				echo '
          		<img
            		id="', $testimony["id"], 'Photo"
            		onclick="testimoniesImgClick(\'', $testimony["id"], '\')"
            		class="profselector__img rounded-circle profselector__img', $first ? " profselector__img--active " : "",'"
            		src="assets/img/testimonies-thumbnail/', $testimony["id"], 'Photo.webp"
				/>';
				$first = false;
			}
		}
		?>
        </div>
	  	<?php
		if($testimonies != NULL && count($testimonies) > 0){
			$first = true;
			foreach ($testimonies as $testimony) {
				echo '<div id="', $testimony["id"], 'Profile" class="profdesc', $first ? '' : ' profdesc--hidden', '">';
					echo '<div class="profdesc__summary">';
						echo '
						<img class="profdesc__sumimg" src="assets/img/testimonies-thumbnail/', $testimony["id"], 'Photo.webp"/> <br> <br>
						<div class="profdesc__name">', $testimony["name"] ,'</div>
						<div class="profdesc__job">', $testimony["job"], '</div> <br>
						<div class="profdesc__years"> Kepengurusan HIMTI: ', $testimony["active_years"], '</div>';
						if(array_key_exists($testimony["id"], $experiences)){
							echo '<ul class="profdesc__experiences">';
								foreach ($experiences[$testimony["id"]] as $experience){
									echo '<li> ', $experience, ' </li>';
								}
							echo '</ul>';
						}
					echo '</div>';
					echo '<div class="profdesc__story">', $testimony["testimony"],'</div>';
				echo'</div>';
				if($first){
					echo '<script type="text/javascript">activeProfile="',$testimony["id"],'"</script>';
				}
				$first = false;
			}
		}
		?>
      </div>
    </main>
    <?php require_once('components/footer.php') ?>
  </body>
</html>
