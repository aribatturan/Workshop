FROM ubuntu AS compiler
RUN apt-get update && apt-get install -y build-essential
COPY hello.c /
RUN make hello

#FROM ubuntu #ubuntu:alpine ile daha da küçült
#COPY --from=compiler /hello /hello
CMD /hello