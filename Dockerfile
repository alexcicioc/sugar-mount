FROM ubuntu

RUN mkdir /sugar

WORKDIR "/sugar"

COPY sugar .

ADD scripts /usr/local/bin/
ADD config/config_override.php /sugar

RUN sugarfixpermissions

RUN apt update && apt install -y rsync

CMD ["copy-to-volume"]
