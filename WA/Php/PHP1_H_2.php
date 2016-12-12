<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html lang="bg-BG">
    <head>
	    <meta charset="UTF-8" />
        <title></title>
		<style>
             th, td
			{
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        <table>
		    
			<frame>Добавяне на нов въпрос:
			    <table border="1" align="left">
				<form action="http://Enevsoft.net/echo.php" method="post" target="result_frame">
                    <tr>
					    <td>Вашето e-mail</td>
						<td><input type="text" name="mail"/></td>
					</tr>
					<tr>
					    <td>Заглавие на въпроса</td>
						<td><input type="text" name="about" required="required"/></td>
					</tr>
					<tr>
					    <td>Относно Курсове:</td>
						<td>
						    <input type="checkbox" name="courses" value="1" checked />FE1
						    <input type="checkbox" name="courses" value="2" />FE2
						    <input type="checkbox" name="courses" value="3" checked />PHP1
						</td>
					</tr>
					<tr>
					    <td>Искам анонимност?</td>
						<td>
						    <input type="radio" name="anonymous" value="1" checked />ДА
						    <input type="radio" name="anonymous" value="0" />НЕ
						</td>
					</tr>
					<tr>
					    <td colspan="2">
						    <input type="hidden" name="question" required="required"/>Въпрос</td>
					</tr>
					<tr>
					    <td colspan="2"><textarea cols="42" ></textarea></td>
					</tr>
					<tr>
					    <td><input type="submit" value="Изпрати" /></td>
						<td><input type="submit" value="Изчисти" /></td>
					</tr>
				</form>
				</table>
			</frame>
			<frame>
			    <iframe name="result_frame" scrolling="yes" ></iframe>
			</frame>
		
        </table>
        

    </body>
</html>
