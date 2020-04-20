import { Injectable } from '@angular/core';

import { environment } from '../../environments/environment'

@Injectable()
export class Config {


  constructor() {

  }
  config = {
    prod: environment
  }

  getConfig () {
    return this.config;
  }

}
