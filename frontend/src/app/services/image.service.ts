import { Injectable } from '@angular/core';
import { HttpClient, HttpParams } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class ImageService {

  constructor(private http: HttpClient) { }
  private baseUrl = 'http://127.0.0.1:8000/api/image/';

  UploadFile(fileDocument:any, data: any){

    const imageData = new FormData();
    imageData.append('imagePath', fileDocument);
    imageData.append('copyright',data.copyright)
    imageData.append('droitsPhotographiques',data.droitsPhotographiques)
    imageData.append('ouvrage_id',data.ouvrage_id)

     return this.http.post(this.baseUrl+'uploadFile',imageData)
 }
   getimages() {

   return this.http.get(this.baseUrl+'index')
 }
}
