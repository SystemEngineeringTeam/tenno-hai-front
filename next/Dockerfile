FROM node:16.19-alpine3.16

ENV TZ Asia/Tokyo

WORKDIR /usr/src/app

COPY ./ ./
RUN apk update && apk add bash
RUN npm install

CMD ["npm", "run", "dev"]
