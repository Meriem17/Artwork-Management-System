import { Injectable } from '@angular/core';
import { HttpClient, HttpParams } from '@angular/common/http';
@Injectable({
  providedIn: 'root'
})
export class ArtisteService {
  private baseUrl = 'http://127.0.0.1:8000/api/artiste/';
  constructor(private http: HttpClient) { }
  getArtiste(data: any) {

    return this.http.get(this.baseUrl+'show/'+data)
  }
  getArtistes() {

    return this.http.get(this.baseUrl+'index')
  }
  updateArtiste(data: any, id: any){

      return this.http.put(this.baseUrl+'update/'+id,data )
  }
  postArtiste(data: any){

      return this.http.post(this.baseUrl+'store',data )
  }
  deleteArtiste(id: any){

      return this.http.delete(this.baseUrl+'destroy/'+id)
  }
}
