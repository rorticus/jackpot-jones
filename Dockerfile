FROM node:10-alpine

COPY package.json /opt/app/
COPY package-lock.json /opt/app/

WORKDIR /opt/app

RUN npm i

COPY * /opt/app/

CMD ["/usr/local/bin/npm", "run", "start"]
