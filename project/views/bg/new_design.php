
<!DOCTYPE html>
<html>
    <head>
        <title>OpenSupport</title>
        <link rel="stylesheet/less" type="text/css" href="http://os.localhost/css/style_new.less" />

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script type="text/javascript" src="http://os.localhost/js/less-1.4.1.min.js"></script>
    </head>
    <body>
        <div id="container">
            <header>
                <img src="http://os.localhost/images/logo.png" id="logo"/>
                <div id="login-nav"><a href="#">Login</a></div>
                <nav>
                    <a href="#">Home</a>  <a href="#">Active tickets</a>  <a href="#">Closed tickets</a>
                </nav>
                <div class="clear"></div>
            </header>
            <div id="page">
                <!--Content should always be longer than sidebar-->
                <div id="leftbar">
                    <h2>Page title</h2>
                    <form method="post">
                        <table>
                            <tr><td>Title</td><td><input type="text" name="title" class="text-input"></td></tr>
                            <tr><td>Email</td><td><input type="email" name="email" class="text-input"></td></tr>
                            <tr><td class="top">Problem description</td><td><textarea rows="5" cols="40" class="text-input"></textarea></td></tr>
                            <tr><td colspan="2"> <input type="submit" name="act" value="Submit ticket" class="button"></td></tr>
                        </table>
                    </form>
                    
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras nulla nibh, iaculis porta consequat sed, lacinia et libero. Mauris feugiat vitae quam quis sodales. Curabitur ut massa ligula. Donec eu scelerisque est. Phasellus pulvinar metus dui. Suspendisse rutrum augue ipsum. Cras mattis justo quis bibendum laoreet. Donec nulla lectus, commodo scelerisque congue in, elementum non magna. Phasellus vel eros cursus, malesuada dui in, sollicitudin erat. Nullam eget nibh massa. Nulla id dapibus est. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin eu nisi nec est dignissim vehicula in nec sem. Phasellus venenatis, orci in porttitor faucibus, ligula sem convallis turpis, sed ultrices ipsum diam eget tellus. Ut venenatis sodales dui, sit amet dictum elit laoreet vitae. Curabitur vitae interdum lacus.</p>
                    <p>Praesent aliquam blandit dui sit amet pharetra. Proin eget pulvinar sem. Proin sem tellus, mollis ut facilisis id, faucibus vel mauris. Fusce imperdiet purus eu eros sollicitudin vehicula. Curabitur nec dui interdum elit semper egestas. Suspendisse mollis dui eu purus dignissim fringilla. Duis orci arcu, mattis nec ante eu, commodo porttitor erat. Vestibulum ipsum sem, ultrices ac urna eget, pellentesque pharetra risus. Curabitur a tellus vel orci aliquam suscipit. Etiam viverra enim metus, vel fringilla neque rutrum sed. Aliquam fringilla purus nunc. Vivamus vehicula est at odio consectetur fermentum. Nam pellentesque gravida erat.</p>
                    <p>Vivamus pellentesque neque libero, tincidunt volutpat dolor ultrices nec. Donec sodales, velit molestie malesuada ultrices, elit magna dapibus orci, at congue dui mi et lectus. Pellentesque et condimentum dolor. Vestibulum ac nisi id lorem bibendum pretium eu nec lectus. Proin lorem odio, convallis vitae sollicitudin nec, pulvinar vel nisi. In nec justo quis neque ullamcorper mollis. Aliquam pulvinar orci sed metus blandit cursus. Maecenas lacinia, tortor ut laoreet porttitor, mauris urna lobortis enim, at placerat sem lorem ac velit. Vestibulum et lorem vestibulum, ultrices nisl id, malesuada tellus. Sed aliquam eu est sit amet luctus. Nam in bibendum odio. Maecenas erat lacus, commodo sed felis ac, luctus faucibus metus.</p>
                    <p>Cras placerat porttitor lorem at vehicula. Suspendisse fermentum aliquam rhoncus. In hac habitasse platea dictumst. Aliquam rutrum risus sit amet pharetra dignissim. Morbi vel iaculis nisl. Praesent lorem neque, consequat nec urna ac, gravida aliquet urna. Nunc elementum mi nec augue facilisis tincidunt. Nam sed justo faucibus, hendrerit orci at, tempor leo. Nulla facilisi. In lacinia id massa eget posuere. Donec elementum dictum eros sit amet vestibulum. Etiam id libero ac justo volutpat porttitor. Quisque eget tempus magna.</p>
                    <p>Sed euismod at libero ullamcorper posuere. Sed ultrices lacinia libero eget luctus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dapibus libero ante, sit amet imperdiet est facilisis hendrerit. Donec venenatis justo turpis, et aliquet orci venenatis eget. Quisque ac facilisis nisl. Vestibulum risus ante, dignissim congue sagittis et, scelerisque in augue. Pellentesque ac ultrices augue, sed lacinia eros. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas pulvinar eu sapien ut consequat. Mauris a bibendum augue. Nam suscipit sapien eget dui ornare, eget euismod nisl ullamcorper. Etiam bibendum placerat velit, nec adipiscing felis mollis non. </p>
                </div>
                <div id="rightbar">
                    <section class="box">
                        <h2>Lorem ipsum</h2>
                        <p>dolor sit amet, consectetur adipiscing elit. Cras nulla nibh, iaculis porta consequat sed, lacinia et libero. Mauris feugiat vitae qtora torquent per conubia nostra, per inceptos himenaeos. Proin eu nisi nec est dignissim vehicula in nec sem. Phasellus venenatis, orci in porttitor faucibus, ligula sem convallis turpis, sed ultrices ipsum diam eget tellus. Ut venenatis sodales dui, sit amet dictum elit laoreet vitae. Curabitur vitae interdum lacus.</p>
                    </section>
                </div>

                <div class="clear"></div>

            </div>
        </div>
        <footer>
            <p>&copy; <?= date('Y'); ?> OpenSupport. All rights reserved!</p>
        </footer>
    </body>
</html>