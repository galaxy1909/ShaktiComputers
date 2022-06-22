<?php include 'header.php';?>
<?php 
$id=$_SESSION['tech'];
include('dbconnection.php');
$sql="select * from technician where TechnicianId = '$id' ";
$result=mysqli_query($con,$sql);
$line=mysqli_fetch_array($result);
?>
<div class="profile">
  <figure>
    <img style="border-radius:50%;border:4px solid #2196F3"src="<?php echo $line['Photo'];?>" alt="" />
  </figure>
  <header>
    <h1><?php echo strtoupper($line['FirstName']); echo "   ";?>
      <?php echo strtoupper($line['LastName']);?></h1>
  </header>
  
 
  <main>
    <dl>
      <dt>Technician ID</dt>
        <dd><?php echo $line['TechnicianId'];?></dd>
        <dt>Full name</dt>
        <dd><?php echo $line['FirstName'];?><?php echo" ". $line['LastName'];?></dd>
      <dt>Address</dt>
        <dd><?php echo $line['Address'];?></dd>
      <dt>Email</dt>
        <dd><?php echo $line['Email'];?></dd>
      <dt>Phone NO.</dt>
        <dd><?php echo $line['Phone'];?></dd>
      <dt>Date Of Joining</dt>
        <dd><?php echo $line['DOJ'];?></dd>
      <dt>User Name</dt>
      <dd><?php echo $line['Username'];?></dd>
      <dt>Profession</dt>
      <dd><?php echo $line['Profession'];?></dd>
      <dt>Salary</dt>
      <dd><?php echo $line['Salary'];?></dd>

    </dl>
  </main>

</div> <!-- end profile -->


<style>
$base-text-color: #151515;
$base-link-color: #1daaff;
$base-hover-color: darken($base-link-color, 20);

$profile-card-size: 500px;
$profile-avatar-size: 150px;
* {box-sizing: border-box;}
html, body {
  font-family: 'Open Sans', sans-serif;
  font-size: 16px;
  user-select: none;
}

/* 
  some styling for display on codepen,
  you can safely remove this when you
  want to use this module somewhere else 
*/
.codepen {
  margin: 2em auto;
  h1 {
    color: lighten($base-text-color, 20);
    font-weight: 100;
  }
  a {
    color: $base-link-color;
    &:hover {
      color: $base-hover-color;
    }
  }
}

.profile {
  @extend .codepen;
  max-width: $profile-card-size;
  border: 1px solid lighten($base-text-color, 80);
  border-radius: 20px;
  padding: 2em;
  margin: 1em;
  display: flex;
  flex-flow: row wrap;
  justify-content: space-between;
  align-items: center;
  align-content: center;
  position: relative;
  background: linear-gradient(90deg, rgba(173,172,174,1) 1%, rgba(252,254,255,1) 100%);
  figure {
    margin: 0;
    img {
      max-width: $profile-avatar-size;
      max-height: $profile-avatar-size;
      border-radius: 50%;
      padding: 10px;
      box-shadow: 0px 0px 20px rgba($base-text-color, .15);
    }
  } // end figure
  
  header {
    h1 {
      margin: 0;
      padding: 0;
      line-height: 1;
      small {
        display: block;
        clear: both;
        font-size: 18px;
        opacity: 0.6;
        
      }
    }
  } // end header
    
  main {
    display: none;

    dl {
      display: block;
      width: 100%;
      dt,
      dd {
        float: left;
        padding: 8px 5px;
        margin: 0;
        border-bottom: 1px solid lighten($base-text-color, 80);
        a {
          padding-right: 5px;
        }
      }
      dt {
        width: 30%;
        padding-right: 10px;
        font-weight: bold;
        &:after {
          content: ":"
        }
      }
      dd {
        width: 70%;
      }
    }
  }

  .toggle {
    position: absolute;
    background: #fff;
    top: 30px;
    left: 30px;
    width: 40px;
    height: 40px;
    line-height: 40px;
    font-size: 24px;
    text-align: center;
    z-index: 20;
    vertical-align: middle;
    box-shadow: 0px 0px 10px rgba($base-text-color, .15);
    cursor: pointer;
    border-radius: 20px;
    user-select: none;
    transition: box-shadow 300ms ease;
    &:hover {
      box-shadow: 0px 0px 10px rgba($base-text-color, .25);
    }
    main {
      font-size: 18px;
    }
  }
}
.view_details {position: absolute; top: -5000px; left: -5000px;}
label {display: block; cursor: pointer;}

@media screen and (max-width: 520px) {
  .profile {
    padding: 1em;
    margin: 1em;
  }
  .profile img {
    max-width: 100%;
    height: auto;
  }
  .profile main dl,
  .profile main dl dt,
  .profile main dl dd {
    display: block;
    width: 100%;
    float: none;
  }
  .profile main dl dt {
    border-bottom: none;
  }
  .profile main dl dd {
    margin-bottom: 10px;
  }

  .profile .toggle {
    top: 15px;
    left: 15px;
  }
}
</style>
<script>
    $(function() {
  $('.view_details').click(function() {
    if ($(this).is(':checked')) {
      $(this)
        .next('label')
        .html('&times;')
        .attr('title', 'tap here to close full profile');
      $(this)
        .parent()
        .next('main')
        .slideDown('normal');
    } else {
      $(this)
        .next('label')
        .html('☰')
        .attr('title', 'tap here to view full profile');
      $(this)
        .parent()
        .next('main')
        .slideUp('fast');
    }
  });
});
</script>
<?php include 'footer.php';?>