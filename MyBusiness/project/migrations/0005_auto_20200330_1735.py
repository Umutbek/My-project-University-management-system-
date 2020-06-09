# Generated by Django 3.0.4 on 2020-03-30 15:35

from django.db import migrations, models
import django.db.models.deletion


class Migration(migrations.Migration):

    dependencies = [
        ('project', '0004_adding_sold'),
    ]

    operations = [
        migrations.RenameField(
            model_name='adding',
            old_name='category',
            new_name='Категория',
        ),
        migrations.RenameField(
            model_name='adding',
            old_name='cost',
            new_name='Количество',
        ),
        migrations.RenameField(
            model_name='adding',
            old_name='name1',
            new_name='Название',
        ),
        migrations.RenameField(
            model_name='adding',
            old_name='quantity',
            new_name='Стоимость',
        ),
        migrations.RenameField(
            model_name='adding',
            old_name='image',
            new_name='Фотография',
        ),
        migrations.RemoveField(
            model_name='adding',
            name='sold',
        ),
        migrations.CreateModel(
            name='Sell',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('количество', models.IntegerField()),
                ('adding', models.ForeignKey(null=True, on_delete=django.db.models.deletion.SET_NULL, to='project.Adding')),
            ],
        ),
    ]
