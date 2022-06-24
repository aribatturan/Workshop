FROM nginx:latest
LABEL maintaner="Ribat Turan @ribatturan"
ENV KULLANICI="ribat"
ARG RENK
RUN apt-get update && apt-get install -y curl htop wget

WORKDIR /usr/share/nginx/html
COPY ./html/${RENK} .
RUN chmod +x script.sh
CMD ["./script.sh"]
