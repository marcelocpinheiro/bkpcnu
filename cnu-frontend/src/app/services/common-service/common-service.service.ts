import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { environment } from '../../../environments/environment';

@Injectable({
  providedIn: 'root'
})
export class CommonService {

  constructor(private http: HttpClient) { }

  public get(endpoint: any, body: any = {}){
    return this.http.get(environment.api_path + endpoint, {params: body});
  }

  public post(endpoint: any, body: any){
    return this.http.post(environment.api_path + endpoint, body);
  }
}
