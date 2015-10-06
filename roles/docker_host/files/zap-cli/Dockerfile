FROM owasp/zap2docker-stable
MAINTAINER grunny

RUN pip install --upgrade git+https://github.com/Grunny/zap-cli.git

RUN chown -R zap /zap/
ENV ZAP_PORT 8081