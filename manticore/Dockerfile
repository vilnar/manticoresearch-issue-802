FROM manticoresearch/manticore:5.0.2

RUN apt update && apt -y install sudo manticore-columnar-lib vim php-cli php-mbstring

# fix permisson
ARG USER_ID=1000
ARG GROUP_ID=1000
RUN usermod -u ${USER_ID} manticore
RUN groupmod -g ${GROUP_ID} manticore

RUN mkhomedir_helper manticore
RUN usermod -aG sudo manticore
RUN echo "manticore ALL=(ALL) NOPASSWD: ALL" >> /etc/sudoers

USER manticore
