<?php

function spl_get_passphrase() {
    
    $endpoint = 'https://app.spokanelibrary.org/v3/level-up';
    $response = json_decode(Crass_Response::curlPostProxy($endpoint, 
                                                            array( 'apikey'=>getenv('SPL_KEY')
                                                            )));
    $passphrase = $response->passphrase;

}

function is_mobile($useragent) {
    $mobile = false;
    if ( !empty($useragent) ) {
				// include tables
				if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))) {
				// new, non-tablet
				//if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))) {
				// orig
				//if(preg_match('/android.+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|e\-|e\/|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(di|rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|xda(\-|2|g)|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))) {
            $mobile = true;
        }
    }
    
    return $mobile;
}

function spl_wireless_params() {
    $login = NULL;
    
    

    $sip = isset($_REQUEST['sip']) ? $_REQUEST['sip'] : NULL;
    $mac = isset($_REQUEST['mac']) ? $_REQUEST['mac'] : NULL;
    $uip = isset($_REQUEST['uip']) ? $_REQUEST['uip'] : NULL;
    $url = isset($_REQUEST['url']) ? $_REQUEST['url'] : 'http://www.spokanelibrary.org';
    $loc = 'lvl';
    $ssid = isset($_REQUEST['ssid'])?$_REQUEST['ssid']: NULL;

    if ( isset($sip) 
        && isset($mac) 
        && isset($uip) 
        && isset($url) 
        && isset($loc) 
        && isset($ssid) 
        ) {

        $dt = new DateTime();
        $now = $dt->format('m/d/Y H:i:s');

        
        $login = array(
                    'ua'=>$_SERVER['HTTP_USER_AGENT'],
                    'sip'=>$sip,
                    'mac'=>$mac,
                    'uip'=>$uip,
                    'url'=>$url,
                    'loc'=>$loc,
                    'ssid'=>$ssid,
                    'stamp'=>$now,
                    'branch'=>$branch
                    );
    }
    
    return $login;
}


$params = spl_wireless_params();
$mobile = is_mobile($_SERVER['HTTP_USER_AGENT']);

$branch = 'lvl';
$username = ( false == $mobile ) ? $branch : $branch.'_'.'mobile';  

//trace($username);

$passphrase = spl_get_passphrase();

?>


<div class="page-header">
    <h1>Level UP <small>at Spokane Public Library</small></h1>
</div>
<h4><?php echo $passphrase; ?></h4>
<div class="row">
    <div class="col-md-8 col-md-offset-2">

    <?php if ( isset($_REQUEST['passphrase']) && $_REQUEST['passphrase'] == $passphrase ) : ?>
        <div class="panel panel-info">
            <div class="panel-heading">
                <small class="glyphicon glyphicon-info-sign"></small>
                Thank you!
            </div><!-- /.panel-heading -->
            <div class="panel-body">

                <form 
                action="http://10.14.50.2:9997/login" 
                method="post" 
                class="form-horizontal"
                id="spl-wireless" 
                <?php
                if ( is_array($params) ) {
                echo 'data-spl="true" ';
                echo 'data-ua="'.$params['ua'].'" ';
                echo 'data-sip="'.$params['sip'].'" ';
                echo 'data-mac="'.$params['mac'].'" ';
                echo 'data-uip="'.$params['uip'].'" ';
                echo 'data-url="'.$params['url'].'" ';
                echo 'data-loc="'.$params['loc'].'" ';
                echo 'data-ssid="'.$params['ssid'].'" ';
                echo 'data-stamp="'.$params['stamp'].'" ';
                echo 'data-branch="'.$params['branch'].'" ';
                }
                ?>
                >
                
                    <input type="hidden" name="username" value="<?php echo $username; ?>" />
                    <input type="hidden" name="password" value="wireless" />
                    
                    <p>
                        Passphrase is correct.
                    </p>

                    <div class="form-group">
                        <div class="col-md-offset-4 col-md-6">
                            <button type="submit" class="btn btn-block btn-default">
                            <small class="glyphicon glyphicon-info-signok"></small>
                            Proceed &rarr;
                            </button>
                        </div>
                    </div>

                </form>

           </div><!-- /.panel-body -->
        </div><!-- /.panel -->
    <?php else: ?>

        <div class="panel panel-info">
            <div class="panel-heading">
                <small class="glyphicon glyphicon-info-sign"></small>
                Please enter today's passphrase to access Level UP WiFi:
            </div><!-- /.panel-heading -->
            <div class="panel-body">

                <form 
                action="./" 
                method="get" 
                class="form-horizontal"
                id="spl-wireless" 
                <?php
                if ( is_array($params) ) {
                echo 'data-spl="true" ';
                echo 'data-ua="'.$params['ua'].'" ';
                echo 'data-sip="'.$params['sip'].'" ';
                echo 'data-mac="'.$params['mac'].'" ';
                echo 'data-uip="'.$params['uip'].'" ';
                echo 'data-url="'.$params['url'].'" ';
                echo 'data-loc="'.$params['loc'].'" ';
                echo 'data-ssid="'.$params['ssid'].'" ';
                echo 'data-stamp="'.$params['stamp'].'" ';
                echo 'data-branch="'.$params['branch'].'" ';
                }
                ?>
                >

                    <?php if ( isset($_REQUEST['passphrase']) ): ?>
                        <h3 class="text-danger">Incorrect passphrase</h3>
                    <?php endif; ?>
                
                    <input type="hidden" name="sip" value="<?php echo $_REQUEST['sip'] ?>" />
                    <input type="hidden" name="mac" value="<?php echo $_REQUEST['mac'] ?>" />
                    <input type="hidden" name="uip" value="<?php echo $_REQUEST['uip'] ?>" />
                    <input type="hidden" name="url" value="<?php echo $_REQUEST['url'] ?>" />
                    <input type="hidden" name="loc" value="<?php echo $_REQUEST['loc'] ?>" />
                    <input type="hidden" name="ssid" value="<?php echo $_REQUEST['ssid'] ?>" />

                    <input type="hidden" name="branch" value="<?php echo $branch ?>" />
                    <input type="hidden" name="username" value="<?php echo $username ?>" />
                    
                    
                    
                    <div class="form-group">
                        <label for="passphrase" class="col-md-4 control-label">Passphrase:</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="passphrase" id="passphrase" placeholder="">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-offset-4 col-md-6">
                            <button type="submit" class="btn btn-block btn-default">
                            <small class="glyphicon glyphicon-info-signok"></small>
                            Login Now &rarr;
                            </button>
                        </div>
                    </div>

                </form>

           </div><!-- /.panel-body -->
        </div><!-- /.panel -->

    <?php endif; ?>
        
    </div>
</div>
