FROM ubuntu:latest
RUN apt-get update
RUN apt-get install -y nginx
ADD ./index.html /var/www/html/
EXPOSE 80
CMD ["nginx", "-g", "daemon off;"]
