<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script language="JavaScript" src="./jquery-1.7.2.min.js"></script>
        <script language="JavaScript" src="./bullet_calc.js"></script>
        <script language="JavaScript">
            $(document).ready(function() {
                $('#btnCalculate').click(function() {
                    var weight = $('input#bullet_weight').val();
                    var fps = $('input#bullet_fps').val();
                    var diameter = $('input#bullet_diameter').val();
                    $('td#ftlbs').text(footPound(weight, fps));
                    $('td#tko').text(taylorKO(weight, diameter, fps));
                }); 
            });
        </script>
        <title></title>
    </head>
    <body>
        <form id='frmCalculator'>
            <table id='tblCalculator'>
                <tr>
                    <td>
                        Bullet Weight:
                        <input type="text" id="bullet_weight" value="0" />
                        Bullet FPS
                        <input type="text" id="bullet_fps" value="0" />
                        Bullet Diameter:
                        <input type="text" id="bullet_diameter" value="0.0" />
                        <input type="button" id="btnCalculate" value="Calculate" />
                    </td>
                </tr>
            </table>
        </form>
        <table>
            <tr>
                <td>
                    Foot Pounds ('ft·lb')s:
                </td>
                <td id="ftlbs">

                </td>
            </tr>
            <tr>
                <td>
                    Taylor Knock Out:
                </td>
                <td id="tko">

                </td>
            </tr>
        </table>
    </body>
</html>
