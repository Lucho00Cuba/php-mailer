FROM ubuntu

MAINTAINER JustMe "lomv0209@gmail.com" 

ENV DEBIAN_FRONTEND=noninteractive
ENV TZ="Europe/Madrid"

WORKDIR /opt/www/

COPY code/ .

RUN apt update && apt install sendmail php -y && \
    /etc/init.d/sendmail start

ENTRYPOINT ["php"] 

CMD ["-S", "0.0.0.0:80"]
