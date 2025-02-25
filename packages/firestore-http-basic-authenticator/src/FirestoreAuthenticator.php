<?php

declare(strict_types=1);

namespace GrotonSchool\Firestore\HttpBasicAuthentication;

use Tuupola\Middleware\HttpBasicAuthentication\AuthenticatorInterface;
use Google\Cloud\Firestore\FirestoreClient;

class FirestoreAuthenticator implements AuthenticatorInterface
{
    // TODO make FirestoreAuthenticator::COLLECTION_PATH configurable
    private const COLLECTION_PATH = '/users';

    private FirestoreClient $firestore;

    public function __construct()
    {
        $this->firestore = new FirestoreClient();
    }

    public function __invoke(array $args): bool
    {
        $query = $this->firestore->collection(FirestoreAuthenticator::COLLECTION_PATH)->where('user', '=', $args['user']);
        $result = $query->documents();
        if ($result->size() == 1) {
            return password_verify($args['password'], $result->rows()[0]->data()['hash']);
        }
        return false;
    }
}
