<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <label for="name">Name:</label><br>
    <input type="text" name="name" id="name" placeholder="Enter your name: "><br>
    <!-- <span class="error">*<php echo $nameErr?></span><br> -->
    <label for="email">Email: </label><br>
    <input type="email" name="email" id="email" placeholder="Enter your email: "><br>
    <!-- <span class="error">*<php echo $emailErr?></span><br> -->
    <label for="comment">Comment: </label><br>
    <textarea name="comment" id="comment" cols="30" rows="10"></textarea>
    <!-- <br><span class="error">*<php echo $commentErr?></span><br> -->
    <label>Gender:</label><br>
    <input type="radio" name="gender" id="m" value="male">Male
    <input type="radio" name="gender" id="f" value="female">Female
    <input type="radio" name="gender" id="o" value="other">Other
    <br>
    <!-- <span class="error">*<php echo $genderErr?></span><br> -->
    <input type="submit" value="Enter meeting">
</form>