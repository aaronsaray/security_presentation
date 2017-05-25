#!/usr/bin/env bash
docker rm security_presentation
docker build -t security_presentation .
docker run -p 9999:80 --name security_presentation security_presentation 