                    <!--Comments-->
                    <hr />
                    <h1>Comments</h1>
                    <form action="" method="POST" class="form-group">
                        Name: <br><input type="text" name="name" class="form-control mb-2 mr-sm-2" placeholder="Your name, or someone elses, I don't care" required>
                        Comment: <br><textarea name="Comment" class="form-control mb-2 mr-sm-2" placeholder="Write something" required></textarea><br>
                        <!--<input type="submit" name="Post comment">-->
                        <button type="submit" name="Post comment" class="btn btn-outline-primary">Submit</button>
                    </form>
                    <hr />
                    <h2>Other comments</h2>
                    <div class="comment_section"></div>
                    <?php
                        include "comments.php";
                    ?>
                    <br />