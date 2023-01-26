import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { NavAdminComponent } from './nav-admin/nav-admin.component';
import { ArtisteMangementComponent } from './artiste-mangement/artiste-mangement.component';
import { ImageMangementComponent } from './image-mangement/image-mangement.component';
import { SidebarComponent } from './sidebar/sidebar.component';
import { NavbarComponent } from './navbar/navbar.component';
import { WelcomepageComponent } from './welcomepage/welcomepage.component';
import { OeuvremanagementComponent } from './oeuvremanagement/oeuvremanagement.component';

const routes: Routes = [
  {
    path: '',
    component: NavAdminComponent,
    children: [
      {
        path: 'welcome',
        component: WelcomepageComponent,

      },
      {
        path: 'artisteMangement',
        component: ArtisteMangementComponent,

      },
      {
        path: 'image',
        component: ImageMangementComponent,

      },
      {
        path: 'oeuvre',
        component: OeuvremanagementComponent,

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
