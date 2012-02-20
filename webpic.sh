#!/bin/sh
#
#  Vasyl Yevstygnyeyev <bazilxp@gmail.com>
#  Date 20/02/2012


export dst="http//xxxx/actionpicture.php"
export img="/tmp/frame.jpg"
while :
do
	fswebcam $img -q  -F 1 --no-title  --no-overlay --no-banner --no-timestamp  
	curl --form file=@$img $dst
	date
done

