<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Direction
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Professeur> $professeurs
 * @property-read int|null $professeurs_count
 * @method static \Database\Factories\DirectionFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Direction newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Direction newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Direction query()
 * @method static \Illuminate\Database\Eloquent\Builder|Direction whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Direction whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Direction whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Direction whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Direction wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Direction whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class IdeHelperDirection {}
}

namespace App\Models{
/**
 * App\Models\Matiere
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property int $professeur_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Professeur $professeur
 * @method static \Database\Factories\MatiereFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Matiere newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Matiere newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Matiere query()
 * @method static \Illuminate\Database\Eloquent\Builder|Matiere whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Matiere whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Matiere whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Matiere whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Matiere whereProfesseurId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Matiere whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class IdeHelperMatiere {}
}

namespace App\Models{
/**
 * App\Models\Note
 *
 * @property int $id
 * @property int $student_id
 * @property int $matiere_id
 * @property int $note
 * @property string $appreciation
 * @property string $periode
 * @property string $year
 * @property string $session
 * @property string $type
 * @property string $coeff
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Matiere $matiere
 * @property-read \App\Models\Student $student
 * @method static \Database\Factories\NoteFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Note newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Note newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Note query()
 * @method static \Illuminate\Database\Eloquent\Builder|Note whereAppreciation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Note whereCoeff($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Note whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Note whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Note whereMatiereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Note whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Note wherePeriode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Note whereSession($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Note whereStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Note whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Note whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Note whereYear($value)
 * @mixin \Eloquent
 */
	class IdeHelperNote {}
}

namespace App\Models{
/**
 * App\Models\Professeur
 *
 * @property int $id
 * @property string $firstname
 * @property string $lastname
 * @property string $email
 * @property string $phone
 * @property int $direction_id
 * @property string $speciality
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Direction $direction
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Matiere> $matieres
 * @property-read int|null $matieres_count
 * @method static \Database\Factories\ProfesseurFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Professeur newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Professeur newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Professeur query()
 * @method static \Illuminate\Database\Eloquent\Builder|Professeur whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Professeur whereDirectionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Professeur whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Professeur whereFirstname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Professeur whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Professeur whereLastname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Professeur wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Professeur whereSpeciality($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Professeur whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class IdeHelperProfesseur {}
}

namespace App\Models{
/**
 * App\Models\SchoolClass
 *
 * @property int $id
 * @property string $className
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Student> $students
 * @property-read int|null $students_count
 * @method static \Database\Factories\SchoolClassFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|SchoolClass newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SchoolClass newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SchoolClass query()
 * @method static \Illuminate\Database\Eloquent\Builder|SchoolClass whereClassName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SchoolClass whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SchoolClass whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SchoolClass whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class IdeHelperSchoolClass {}
}

namespace App\Models{
/**
 * App\Models\Student
 *
 * @property int $id
 * @property string $firstname
 * @property string $lastname
 * @property string $birthday
 * @property string $phone
 * @property string $email
 * @property string $birthplace
 * @property int $class_id
 * @property string|null $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Note> $notes
 * @property-read int|null $notes_count
 * @property-read \App\Models\SchoolClass $schoolClass
 * @method static \Database\Factories\StudentFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Student newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Student newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Student query()
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereBirthday($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereBirthplace($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereClassId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereFirstname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereLastname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class IdeHelperStudent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $firstname
 * @property string $lastname
 * @property string $email
 * @property int $direction_id
 * @property string $phone
 * @property string $role
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDirectionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFirstname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLastname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class IdeHelperUser {}
}

