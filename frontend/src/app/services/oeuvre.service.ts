import { Injectable } from '@angular/core';
import { HttpClient, HttpParams } from '@angular/common/http';
@Injectable({
  providedIn: 'root'
})
export class OeuvreService {

  private baseUrl = 'http://127.0.0.1:8000/api/ouvrage/';
  constructor(private http: HttpClient) { }
  getOuvrage(data: any) {

    return this.http.get(this.baseUrl+'show/'+data)
  }
  getOuvrages() {

    return this.http.get(this.baseUrl+'index')
  }
  updateOuvrage(data: any, id: any){

      return this.http.put(this.baseUrl+'update/'+id,data )
  }
  postOuvrage(data: any){

      return this.http.post(this.baseUrl+'store',data )
  }
  deleteOuvrage(id: any){

      return this.http.delete(this.baseUrl+'destroy/'+id)
  }
}
