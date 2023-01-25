import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { NavAdminComponent } from './nav-admin/nav-admin.component';
import { ArtisteMangementComponent } from './artiste-mangement/artiste-mangement.component';
import { ImageMangementComponent } from './image-mangement/image-mangement.component';
import { SidebarComponent } from './sidebar/sidebar.component';
import { NavbarComponent } from './navbar/navbar.component';
import { WelcomepageComponent } from './welcomepage/welcomepage.component';
const routes: Routes = [
  {
    path: '',
    component: SidebarComponent,
    children: [
      {
        path: 'artisteMangement',
        component: ArtisteMangementComponent,

      },
      {
        path: 'image',
        component: ImageMangementComponent,

      },
    ]

  },

  {
    path: 'sidebar',
    component: SidebarComponent,

  },
  {
    path: 'welcome',
    component: WelcomepageComponent,

  },

];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})


export class AppRoutingModule { }
