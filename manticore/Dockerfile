FROM manticoresearch/manticore:5.0.2

RUN apt update && apt -y install sudo manticore-columnar-lib vim php-fpm php-mbstring

RUN mkhomedir_helper manticore
RUN usermod -aG sudo manticore
RUN echo "manticore ALL=(ALL) NOPASSWD: ALL" >> /etc/sudoers

USER manticore
